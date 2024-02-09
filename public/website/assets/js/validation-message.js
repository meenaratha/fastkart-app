function showError(field, message) {
    var inputField = $("#" + field);
    // Assuming the error message <div> ID follows a specific naming pattern.
    var errorMessageDiv = $("#" + field + "-error");

    if (!message) {
      inputField.addClass('is-valid').removeClass('is-invalid');
      errorMessageDiv.text("");
    } else {
      inputField.addClass('is-invalid').removeClass('is-valid');
      errorMessageDiv.text(message);
    }
  }

  function removeValidationClasses(form) {
    $(form).find(":input").each(function() {
        $(this).removeClass("is-valid is-invalid");
        // Also clear the associated error message
        var fieldId = $(this).attr('id');
        $("#" + fieldId + "-error").text(""); // Clear the error message text
    });
}

function showMessage(type, message){
    return ` <div class="alert alert-${type} alert-dismissible d-flex align-items-baseline" role="alert">
    <div class="d-flex flex-column ps-1">
      <span class="alert-heading mb-2"> ${message }</span>
      <p class="mb-0"></p>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
      </button>
    </div>
  </div>`;
}



