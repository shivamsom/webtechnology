 var loadFile = function(event) {
    var output = document.getElementById('passport');
    output.src = URL.createObjectURL(event.target.files[0]);
  };
  
  function upload_sign(event)
  {
  	var op = document.getElementById('sig');
  	op.src = URL.createObjectURL(event.target.files[0]);
  }