export function useModal() {
    return {
        open: false,
        name: "",
        focusableElements: [],
        previousFocus: null,

        openModal(event) {
            if (event) {
                this.name = event.detail?.name || "";
            }
            this.previousFocus = document.activeElement;
            this.open = true;
            this.$nextTick(() => {
                this.focusableElements = this.$el.querySelectorAll(
                    'button, [href], input, select, textarea, [tabindex]:not([tabindex="-1"])'
                );
                if (this.focusableElements.length > 0) {
                    this.focusableElements[0].focus();
                }
            });
        },

        closeModal() {
            if (this.previousFocus) {
                this.previousFocus.focus();
            }
            this.open = false;
            this.name = "";
        },

        handleEscape() {
            this.closeModal();
        },

        handleBackdropClick(event) {
            if (event.target === event.currentTarget) {
                this.closeModal();
            }
        },

        handleKeydown(event) {
            if (event.key === "Escape") {
                this.closeModal();
                return;
            }

            if (event.key === "Tab") {
                this.trapFocus(event);
            }
        },

        trapFocus(event) {
            if (this.focusableElements.length === 0) return;

            const first = this.focusableElements[0];
            const last = this.focusableElements[this.focusableElements.length - 1];

            if (event.shiftKey) {
                if (document.activeElement === first) {
                    event.preventDefault();
                    last.focus();
                }
            } else {
                if (document.activeElement === last) {
                    event.preventDefault();
                    first.focus();
                }
            }
        },
    };
}
