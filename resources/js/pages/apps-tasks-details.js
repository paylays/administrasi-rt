import Dropzone from 'dropzone';

Dropzone.autoDiscover = false;

let myDropzone = new Dropzone("#myAwesomeDropzone");
myDropzone.on("addedfile", file => {

});
