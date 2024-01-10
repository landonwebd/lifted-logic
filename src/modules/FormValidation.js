class FormValidation{
  constructor() {
    this.form = document.querySelector(".form-field");
    this.errorField = document.querySelector(".error-field");
    this.submitButton = this.form.querySelector("#input-submit");
    this.events();
  }

  events() {
    this.submitButton.addEventListener("click", (e) => this.validateForm(e));
  }

  validateForm(e) {
    let firstName = this.form.querySelector("#first-name").value;
    let lastName = this.form.querySelector("#last-name").value;
    let formEmail = this.form.querySelector("#form-email").value;
    let reasonForContact = this.form.querySelector("#reason-for-contact").value;
    let errorMessage = "";
    if (firstName == "") {
      e.preventDefault();
      errorMessage += "First name must be filled out<br>";
    }
    if (lastName == "") {
      e.preventDefault();
      errorMessage += "Last name must be filled out<br>";
    }
    if(formEmail == "") {
      e.preventDefault();
      errorMessage += "Email must be filled out<br>";
    }
    if (reasonForContact == "") {
      e.preventDefault();
      errorMessage += "Please select a reason for contact<br>";
    }
    if(errorMessage != "") {
      this.errorField.classList.remove("hide");
      this.errorField.innerHTML = errorMessage;
      return false;
    }
    return;
  }
}

export default FormValidation;
