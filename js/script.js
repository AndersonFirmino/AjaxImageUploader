  
var EstudeJS;

EstudeJS = (function() {
  var jQueryBtn, upLoad, enviar;
  function EstudeJS() {}

  EstudeJS.init = function() {
    jQueryBtn();
  };

  jQueryBtn = function() {
    $('#imagem').on('change', upLoad);
    $('#enviar').click(enviar);
  }
  upLoad = function() {
    console.info('Subindo');   
  }
  enviar = function() {
    console.log('pegando a imagem e tentando enviar');
    var url = "action_ajax/ajax.php",        
    data = new FormData();
    $.each($('#imagem')[0].files, function(i, file) {      
      data.append('imagem', file); //Se for uma unica imagem
      // data.append('imagem-'+i, file); //para multiplas imagens
      console.log(data);
    });     
    $.ajax({      
      url: url,
      data: data,
      cache: false,
      contentType: false,
      processData: false,
      //Barra de progresso, opcional
      xhr: function() {
        var xhr = new window.XMLHttpRequest();

        xhr.upload.addEventListener("progress", function(evt) {
          if (evt.lengthComputable) {
            var percentComplete = evt.loaded / evt.total;
            percentComplete = parseInt(percentComplete * 100);
            
            console.log(percentComplete);
            $('.progress-bar').attr('aria-valuenow', percentComplete);
            $('.progress-bar').css('width', (percentComplete * 10)+'px');
            $('.progress-bar').html(percentComplete+'%');

            if (percentComplete === 100) {
            }
          }
        }, false);
        return xhr;
      },
      type: 'POST',             
      success: function(data){
        console.log(data);
      }
    });    
  }


  return EstudeJS;
})();




(function($){
  $(function(){
    EstudeJS.init();
  });
})(jQuery);