
const profile_Btn = document.getElementById('profilePannel');
const profile_Menu = document.getElementById('profileMenu');
let profileMenuToggle = false;
const side_Btn = document.getElementById('sideBtn');
const side_Menu = document.getElementById('sideMenu');
let sideMenuToggle = false;
const provider_Btn = document.getElementById('providerDropDown');
const provider_Container = document.getElementById('providerContainer');
let providerMenuToggle = false;

profile_Btn.addEventListener('click', () => {
    if(!profileMenuToggle){
        profile_Menu.classList.add('show');
        profileMenuToggle = true;
    }else{
        profile_Menu.classList.remove('show');
        profileMenuToggle = false;
    }
})

side_Btn.addEventListener('click', () => {
    // Toggle the 'show' class on side_Menu
    if (!sideMenuToggle) {
        side_Menu.classList.add('show');
        sideMenuToggle = true;
    } else {
        side_Menu.classList.remove('show');
        sideMenuToggle = false;
    }
});

provider_Btn.addEventListener('click', () => {
    // Toggle the 'show' class on side_Menu
    if (!providerMenuToggle) {
        provider_Container.classList.add('show');
        providerMenuToggle = true;
    } else {
        provider_Container.classList.remove('show');
        providerMenuToggle = false;
    }
});
