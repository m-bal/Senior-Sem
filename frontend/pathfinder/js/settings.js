function dataEntrySubmitForms() {

    document.getElementById("grades").submit();
    document.getElementById("hobbies").submit();

}

function personalSubmitForms() {

    document.getElementById("name").submit();
    document.getElementById("location").submit();

}

function areYouSure() {

    if (document.getElementById("optin").checked == false) {
        
        if (confirm("Are you sure?\nYou will not be recommended a career if you opt out.\nHowever, you can still use other features of the site and set your own preferred career.")) {
                submitForms();
            } else {
                alert("Option has not been saved.\n");
            }

    } else {

            submitForms();

    }    

    function submitForms() {

        document.getElementById("privacy").submit();

    }

}

function setInputFilter(textbox, inputFilter) {
  ["input", "keydown", "keyup", "mousedown", "mouseup", "select", "contextmenu", "drop"].forEach(function(event) {
    textbox.addEventListener(event, function() {
      if (inputFilter(this.value)) {
        this.oldValue = this.value;
        this.oldSelectionStart = this.selectionStart;
        this.oldSelectionEnd = this.selectionEnd;
      } else if (this.hasOwnProperty("oldValue")) {
        this.value = this.oldValue;
        this.setSelectionRange(this.oldSelectionStart, this.oldSelectionEnd);
      }
    });
  });
}

setInputFilter(document.getElementById("intLimitTextBox"), function(value) {
      return /^\d*$/.test(value) && (value === "" || parseInt(value) <= 100); });
