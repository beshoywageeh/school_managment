export function dataTable() {
    return {
        rows: [],
        loading: false,
        currentPage: 1,
        lastPage: 1,
        total: 0,
        from: 0,
        to: 0,
        sortField: null,
        sortDirection: "asc",
        filters: {},
        perPage: 15,
        error: null,
        endpoint: "",

        init() {
            if (this.endpoint) {
                this.fetchPage();
            }
        },

        async fetchPage(url = null) {
            this.loading = true;
            this.error = null;

            try {
                const params = {
                    page: this.currentPage,
                    per_page: this.perPage,
                };

                if (this.sortField) {
                    params.sort = this.sortField;
                    params.direction = this.sortDirection;
                }

                Object.entries(this.filters).forEach(([key, value]) => {
                    if (value !== "" && value !== null) {
                        params[`filter[${key}]`] = value;
                    }
                });

                const response = await window.axios.get(url || this.endpoint, { params });
                this.rows = response.data;
                this.currentPage = response.current_page;
                this.lastPage = response.last_page;
                this.total = response.total;
                this.from = response.from;
                this.to = response.to;
            } catch (err) {
                this.error = err?.message || "حدث خطأ في تحميل البيانات";
            } finally {
                this.loading = false;
            }
        },

        sort(field) {
            if (this.sortField === field) {
                this.sortDirection = this.sortDirection === "asc" ? "desc" : "asc";
            } else {
                this.sortField = field;
                this.sortDirection = "asc";
            }
            this.currentPage = 1;
            this.fetchPage();
        },

        applyFilters() {
            this.currentPage = 1;
            this.fetchPage();
        },

        refresh() {
            this.fetchPage();
        },

        goToPage(page) {
            if (page < 1 || page > this.lastPage) return;
            this.currentPage = page;
            this.fetchPage();
        },
    };
}
