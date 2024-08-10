let imageFieldIndex = 1;

function addImageUploadField() {
    imageFieldIndex++;

    const newFieldHtml = `
        <div class="form-group">
            <label for="inputImage${imageFieldIndex}">Upload Slider Images ${imageFieldIndex}</label>
            <input type="file" id="inputImage${imageFieldIndex}" name="images[]" class="form-control-file" accept="image/*">
            <div id="imagePreview${imageFieldIndex}" class="mt-2"></div>
        </div>
    `;

    document.getElementById('imageUploadFields').insertAdjacentHTML('beforeend', newFieldHtml);
}
    container.appendChild(newFieldDiv);

    // Add event listener to the new input field
    const newFileInput = document.getElementById(`inputImage${imageFieldCount}`);
    newFileInput.addEventListener('change', function(event) {
      const imagePreview = document.getElementById(`imagePreview${imageFieldCount}`);
      imagePreview.innerHTML = ''; // Clear previous previews

      const files = event.target.files;
      for (const file of files) {
        if (file && file.type.startsWith('image/')) {
          const reader = new FileReader();

          reader.onload = function(e) {
            const img = document.createElement('img');
            img.src = e.target.result;
            img.style.maxWidth = '200px'; // Adjust the size as needed
            img.style.maxHeight = '200px'; // Adjust the size as needed
            imagePreview.appendChild(img);
          };

          reader.readAsDataURL(file);
        }
      }
    });


  // Add initial event listener to the first image input field
  document.getElementById('inputImage1').addEventListener('change', function(event) {
    const imagePreview = document.getElementById('imagePreview1');
    imagePreview.innerHTML = ''; // Clear previous previews

    const files = event.target.files;
    for (const file of files) {
      if (file && file.type.startsWith('image/')) {
        const reader = new FileReader();

        reader.onload = function(e) {
          const img = document.createElement('img');
          img.src = e.target.result;
          img.style.maxWidth = '200px'; // Adjust the size as needed
          img.style.maxHeight = '200px'; // Adjust the size as needed
          imagePreview.appendChild(img);
        };

        reader.readAsDataURL(file);
      }
    }
  });

  // list Accessories data table initialization
  $(document).ready(function() {
    $('#accessoriesTable').DataTable();
});
