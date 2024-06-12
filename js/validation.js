document.querySelector('button[type="submit"]').onclick = function(event) {
    var formIsValid = true;

    var titleField = document.querySelector('input[name="title"]');
    var title = titleField.value;
    if (title.length < 5 || title.length > 30) {
        formIsValid = false;
        titleField.style.border = "1px dashed red";
        document.getElementById("titleMessage").innerHTML = "Title must be between 5 and 30 characters!<br>";
    } else {
        titleField.style.border = "1px solid green";
        document.getElementById("titleMessage").innerHTML = "";
    }

    var descriptionField = document.querySelector('textarea[name="description"]');
    var description = descriptionField.value;
    if (description.length < 10 || description.length > 100) {
        formIsValid = false;
        descriptionField.style.border = "1px dashed red";
        document.getElementById("descriptionMessage").innerHTML = "Description must be between 10 and 100 characters!<br>";
    } else {
        descriptionField.style.border = "1px solid green";
        document.getElementById("descriptionMessage").innerHTML = "";
    }

    var pictureField = document.querySelector('input[name="picture"]');
    var picture = pictureField.value;
    if (picture.length == 0) {
        formIsValid = false;
        pictureField.style.border = "1px dashed red";
        document.getElementById("pictureMessage").innerHTML = "Picture must be uploaded!<br>";
    } else {
        pictureField.style.border = "1px solid green";
        document.getElementById("pictureMessage").innerHTML = "";
    }

    var archiveField = document.querySelector('input[name="archive"]:checked');
    if (!archiveField) {
        formIsValid = false;
        document.getElementById("archiveMessage").innerHTML = "Archive option must be selected!<br>";
    } else {
        document.getElementById("archiveMessage").innerHTML = "";
    }

    var categoryField = document.querySelector('input[name="category"]:checked');
    if (!categoryField) {
        formIsValid = false;
        document.getElementById("categoryMessage").innerHTML = "Category must be selected!<br>";
    } else {
        document.getElementById("categoryMessage").innerHTML = "";
    }

    if (!formIsValid) {
        event.preventDefault();
    }
};
