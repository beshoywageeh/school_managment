export function useToast() {
    return {
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
    };
}
