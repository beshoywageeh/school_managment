export function useFetch() {
    return {
        loading: false,
        error: null,
        data: null,

        async fetch(url, options = {}) {
            this.loading = true;
            this.error = null;

            try {
                const response = await window.axios.get(url, options);
                this.data = response;
                return response;
            } catch (err) {
                this.error = err?.message || "حدث خطأ في تحميل البيانات";
                throw err;
            } finally {
                this.loading = false;
            }
        },

            async post(url, data = {}) {
                this.loading = true;
                this.error = null;

                try {
                    const response = await window.axios.post(url, data);
                    return response;
                } catch (err) {
                    this.error = err?.errors || err?.message || "حدث خطأ في حفظ البيانات";
                    throw err;
                } finally {
                    this.loading = false;
                }
            },

                async patch(url, data = {}) {
                    this.loading = true;
                    this.error = null;

                    try {
                        const response = await window.axios.patch(url, data);
                        return response;
                    } catch (err) {
                        this.error = err?.errors || err?.message || "حدث خطأ في تحديث البيانات";
                        throw err;
                    } finally {
                        this.loading = false;
                    }
                },
    };
}
