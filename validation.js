$(document).ready(function() {
    $('form').submit(function(e) {
      e.preventDefault();
      $('.error').remove();
      var title = $('input[name="title"]').val();
      if (title.length === 0) {
        $('<span class="error">Please enter a title</span>').insertAfter('input[name="title"]');
      }
      var about = $('textarea[name="about"]').val();
      if (about.length === 0) {
        $('<span class="error">Please enter a short description</span>').insertAfter('textarea[name="about"]');
      }
      var content = $('textarea[name="content"]').val();
      if (content.length === 0) {
        $('<span class="error">Please enter the content</span>').insertAfter('textarea[name="content"]');
      }
      var photo = $('input[name="pphoto"]').val();
      if (photo.length === 0) {
        $('<span class="error">Please select a photo</span>').insertAfter('input[name="pphoto"]');
      }
      var category = $('select[name="category"]').val();
      if (category.length === 0) {
        $('<span class="error">Please select a category</span>').insertAfter('select[name="category"]');
      }
      if ($('.error').length === 0) {
        $('form').unbind('submit').submit();
      }
    });
  });