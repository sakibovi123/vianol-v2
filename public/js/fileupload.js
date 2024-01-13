$(document).ready(function() {
    $('#inputTag').on('change', function() {
        var input = this;
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                $('#imagePreview').html('<img id="uploadedImg" src="' + e.target.result + '" alt="Preview"/>');
                // $("#filePreview").html('<img id="uploadedFile" src="' + e.target.result + '" alt="Preview"/>');
                // Hide the icon and title below it
                $('#uploader label, #uploader p').hide();

                // Adjust the uploaded image's dimensions to match the #uploader div
                var uploaderWidth = $('#uploader').width();
                var uploaderHeight = $('#uploader').height();
                $('#uploadedImg').css({'width': uploaderWidth, 'height': uploaderHeight});
                $("#removeImage").removeClass("d-none");
            }

            reader.readAsDataURL(input.files[0]);
        }
    });

    // Handle remove image
    $('#uploader').on('click', '#removeImage', function() {
        $('#uploadedImg').remove();
        $('#inputTag').val(''); // Reset file input
        $('#uploader label, #uploader p').show();
        $(this).addClass("d-none");
    });

    // Handle image upload using AJAX
    $('#inputTag').on('change', function() {
        var fileInput = $(this)[0];
        var formData = new FormData();
        formData.append('image', fileInput.files[0]);

        // Send the image data to the backend using AJAX
        $.ajax({
            url: "{{ route('create_provider') }}", // Replace with your backend route
            method: 'POST',
            processData: false,
            contentType: false,
            data: formData,
            success: function(response) {
                // Assuming the response contains the URL of the uploaded image
                var imageUrl = response.imageUrl; // Modify this based on your backend response

                // Display the uploaded image preview inside the uploader div
                $('#imagePreview').html('<img id="uploadedImg" src="' + imageUrl + '" alt="Uploaded Image"/>');

                // Hide the icon and title below it
                $('#uploader label, #uploader p').hide();

                // Adjust the uploaded image's dimensions to match the #uploader div
                var uploaderWidth = $('#uploader').width();
                var uploaderHeight = $('#uploader').height();
                $('#uploadedImg').css({'width': uploaderWidth, 'height': uploaderHeight});
                $("#removeImage").removeClass("d-none");
            },
            error: function(error) {
                console.error('Error uploading image:', error);
            }
        });
    });
});


// file uploading function


$(document).ready(function() {
    $('#inputTag2').on('change', function() {
        var input = this;
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                $('#imagePreview2').html('<img id="uploadedImg2" src="' + e.target.result + '" alt="Preview"/>');
                $('#uploader2 label, #uploader2 p').hide();
                $("#removeImage2").removeClass("d-none");

                // Set the uploaded image's dimensions to match the #imagePreview2 div
                var uploaderWidth = $('#uploader').width();
                var uploaderHeight = $('#uploader').height();
                $('#uploadedImg2').css({'width': uploaderWidth, 'height': uploaderHeight});
                // $('#uploadedImg2').css({'max-width': '100%', 'max-height': '100%'});
            }

            reader.readAsDataURL(input.files[0]);
        }
    });

    // Handle remove image
    $('#removeImage2').on('click', function() {
        $('#uploadedImg2').remove();
        $('#inputTag2').val('');
        $('#uploader2 label, #uploader2 p').show();
        $(this).addClass("d-none");
    });

    // Handle image upload using AJAX (Assuming the same as before)
    $('#inputTag2').on('change', function() {
        var fileInput = $(this)[0];
        var formData = new FormData();
        formData.append('image', fileInput.files[0]);

        // Send the image data to the backend using AJAX
        $.ajax({
            url: "{{ route('create_provider') }}", // Replace with your backend route
            method: 'POST',
            processData: false,
            contentType: false,
            data: formData,
            success: function(response) {
                var imageUrl = response.imageUrl;
                $('#imagePreview2').html('<img id="uploadedImg2" src="' + imageUrl + '" alt="Uploaded Image"/>');
                $('#uploader2 label, #uploader2 p').hide();
                $("#removeImage2").removeClass("d-none");
                $('#uploadedImg2').css({'max-width': '100%', 'max-height': '100%'});
            },
            error: function(error) {
                console.error('Error uploading image:', error);
            }
        });
    });
});
