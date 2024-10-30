<script>
    function showPlace(placeId) {
        // Oculta todas las secciones de lugares
        document.querySelectorAll('.place').forEach((place) => {
            place.style.display = 'none';
        });

        // Muestra la sección seleccionada
        const selectedPlace = document.getElementById(placeId);
        if (selectedPlace) {
            selectedPlace.style.display = 'block';
            selectedPlace.style.opacity = '0';
            setTimeout(() => {
                selectedPlace.style.opacity = '1';
                selectedPlace.style.transition = 'opacity 0.5s';
            }, 10);
        }
    }

    window.addEventListener('load', () => {
        showPlace('inicio'); // Muestra la sección de inicio al cargar
    });
</script>
