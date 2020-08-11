class AuthButton extends HTMLElement {
    constructor() {
        super();

        const shadow = this.attachShadow();

        const wrapper = document.createElement('span');
        shadow.appendChild(wrapper);
    }
}

customElements.define('auth-button', AuthButton);