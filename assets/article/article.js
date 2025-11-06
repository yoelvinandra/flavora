function toggleDropdown(dropdown) {
  dropdown.classList.toggle('show');
  // console.log("ok");
}

function selectedType(button) {
  const buttons = document.querySelectorAll('.tab-type');
  buttons.forEach(btn => btn.classList.remove('active'));
  button.classList.add('active');
}

// window.onclick = function(event) {
//   if (!event.target.closest('.dropdownfilter')) {
//     document.getElementById('dropdownfilter').classList.remove('show');
//   }
// }