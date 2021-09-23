function onSubmit(token) {
    document.getElementById("contact-form").submit();
}

function initMap() {
    // The location of Uluru
    const mexicoLoc = {
        lat: 19.4299669,
        lng: -99.1935539
    };
    const mexicoMap = new google.maps.Map(document.getElementById("mexico-map"), {
        zoom: 15,
        center: mexicoLoc,
    });
    const mexicoMarker = new google.maps.Marker({
        position: mexicoLoc,
        map: mexicoMap,
        title: 'Cargo Corp UW Mexico',
        animation: google.maps.Animation.DROP,
    });

    const miamiLoc = {
        lat: 25.7668374,
        lng: -80.1909157
    };
    const miamiMap = new google.maps.Map(document.getElementById("miami-map"), {
        zoom: 15,
        center: miamiLoc,
    });
    const miamiMarker = new google.maps.Marker({
        position: miamiLoc,
        map: miamiMap,
        title: 'Cargo Corp UW Miami',
        animation: google.maps.Animation.DROP,
    });
    miamiMarker.setMap(miamiMap);
}

window.addEventListener('load', function () {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');

    // Loop over them and prevent submission
    Array.prototype.filter.call(forms, function (form) {
        form.addEventListener('submit', function (event) {
            if (form.checkValidity() === false) {
                console.log("Errors in form");
                event.preventDefault();
                event.stopPropagation();
            }
            form.classList.add('was-validated');
        }, false);
    });

    const invalidInput = document.querySelectorAll('.form-group.is-invalid > input');
    invalidInput.forEach((element) => element.classList.add('is-invalid'));

}, false);
