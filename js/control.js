const audios = document.querySelectorAll('audio');

// Función para pausar todos los audios, excepto el especificado
function pauseOtherAudios(currentAudio) {
  audios.forEach(audio => {
    if (audio !== currentAudio) {
      audio.pause();
    }
  });
}

// Agrega el evento de reproducción a cada audio
audios.forEach(audio => {
  audio.addEventListener('play', function() {
    pauseOtherAudios(audio);
  });
});