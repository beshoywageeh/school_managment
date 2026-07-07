import "./bootstrap";
import Alpine from "alpinejs";
import flatpickr from "flatpickr";
import ApexCharts from "apexcharts";
import axios from "axios";

window.ApexCharts = ApexCharts;
window.flatpickr = flatpickr;
window.Alpine = Alpine;
window.axios = axios;

const http = axios.create({
    baseURL: "/api",
    headers: {
        "X-Requested-With": "XMLHttpRequest",
        Accept: "application/json",
    },
});

http.interceptors.request.use((config) => {
    const token = document.querySelector('meta[name="csrf-token"]')?.getAttribute("content");
    if (token) {
        config.headers["X-CSRF-TOKEN"] = token;
    } else {
        console.warn("CSRF token meta tag not found");
    }
    return config;
});

http.interceptors.response.use(
    (response) => response.data,
    (error) => {
        if (!error.response) {
            window.dispatchEvent(new CustomEvent("add-toast", {
                detail: { id: Date.now(), message: "حدث خطأ في الاتصال", type: "danger", sticky: false, duration: 5000, progress: 100 },
            }));
            return Promise.reject(error);
        }

        const { status } = error.response;

        if (status === 401 || status === 419) {
            window.dispatchEvent(new CustomEvent("add-toast", {
                detail: { id: Date.now(), message: "انتهت الجلسة", type: "warning", sticky: false, duration: 5000, progress: 100 },
            }));
            setTimeout(() => { window.location.href = "/login"; }, 2000);
            return Promise.reject(error);
        }

        if (status === 422) {
            return Promise.reject(error.response.data);
        }

        if (status >= 500) {
            window.dispatchEvent(new CustomEvent("add-toast", {
                detail: { id: Date.now(), message: "حدث خطأ في النظام", type: "danger", sticky: false, duration: 5000, progress: 100 },
            }));
        }

        return Promise.reject(error);
    }
);

let slowTimeout;
http.interceptors.request.use((config) => {
    slowTimeout = setTimeout(() => {
        window.dispatchEvent(new CustomEvent("add-toast", {
            detail: { id: Date.now(), message: "جاري التحميل...", type: "info", sticky: false, duration: 5000, progress: 100 },
        }));
    }, 8000);
    return config;
});

http.interceptors.response.use(
    (response) => {
        clearTimeout(slowTimeout);
        return response;
    },
    (error) => {
        clearTimeout(slowTimeout);
        return Promise.reject(error);
    }
);

Alpine.store("toast", {
    show: false,
    message: "",
    type: "error",
    timeout: null,

    show(message, type = "error", duration = 5000) {
        window.dispatchEvent(new CustomEvent("add-toast", {
            detail: { id: Date.now(), message, type, sticky: false, duration, progress: 100 },
        }));
    },

    hide() {
        window.dispatchEvent(new CustomEvent("remove-toast", { detail: Date.now() }));
    },
});

import { dataTable } from "./Components/DataTable/index.js";
Alpine.data("dataTable", dataTable);

import { useFetch } from "./Composables/useFetch.js";
Alpine.data("useFetch", useFetch);

Alpine.start();
