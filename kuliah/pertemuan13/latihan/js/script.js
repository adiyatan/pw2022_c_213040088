function previewimg(){
	const gambar = document.querySelector('#gambar');
	const imgPreview = document.querySelector('#img-preview');
	imgPreview.style.display = 'block';
	var ofReader = new FileReader();
	ofReader.readAsDataURL(gambar.files[0]);

	ofReader.onload = function (oFREvent){
		imgPreview.src = oFREvent.target.result;
	};

}