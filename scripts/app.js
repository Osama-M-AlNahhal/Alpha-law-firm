window.onscroll = () => {
    const navbarTop = document.querySelector('.navbar-top');
    const logo = document.querySelector('#logo');
    const motoMain = document.querySelector('.moto-main');
    const motoSub = document.querySelector('.moto-sub');
    const navbarLinks = document.querySelector('.navbar-links').children;
    const phoneNumber = document.querySelector('.phone-number');
    const callUsBtn = document.querySelector('.call-us-btn');

    var practiceAreas = document.getElementsByClassName('practice-area');
    

    if (window.scrollY > 0) {
        navbarTop.classList.add('sticky');

        logo.classList.add('inverted-img');

        motoMain.classList.add('golden-text');
        motoMain.classList.remove('dark-text');
        
        motoSub.classList.add('white-text');
        motoSub.classList.remove('dark-text');

        callUsBtn.classList.add('btn-link-light');
        callUsBtn.classList.remove('btn-link-dark');
        phoneNumber.classList.add('white-text');
        phoneNumber.classList.remove('dark-text');

        for (let i = 0; i < navbarLinks.length; i++) {
            navbarLinks[i].classList.add('white-text');
            navbarLinks[i].classList.remove('dark-text');
        }
    } else {
        navbarTop.classList.remove('sticky');

        logo.classList.remove('inverted-img');

        motoMain.classList.add('dark-text');
        motoMain.classList.remove('light-text');

        motoSub.classList.add('dark-text');
        motoSub.classList.remove('white-text');

        callUsBtn.classList.add('btn-link-dark');
        callUsBtn.classList.remove('btn-link-light');
        phoneNumber.classList.add('darl-text');
        phoneNumber.classList.remove('white-text');

        for (let i = 0; i < navbarLinks.length; i++) {
            navbarLinks[i].classList.add('dark-text');
            navbarLinks[i].classList.remove('light-text');
        }
    }

    // handling profile pic for login 
    const profileIcon = document.querySelector('.user-image');

    


    // get the user location and display it on the map
    // or display a static image if something goes wrong

    // function getLocation() {
    //     if (navigator.geolocation) {
    //         navigator.geolocation.watchPosition(placePositionOnMap);
    //     } else {
    //         placeStaticPositionOnMap();
    //     }
    // }

    // function placePositionOnMap(position) {
    //     const lat = position.coords.latitude;
    //     const lng = position.coords.longitude;


    // }

    // function placeStaticPositionOnMap() {

    // }
    
    // function handleMapError() {
        
    // }

    //fuck you google maps api for requiring credit card info just to 'make sure you're not a bot'

}