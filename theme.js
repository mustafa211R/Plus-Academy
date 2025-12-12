document.addEventListener('DOMContentLoaded', () => {
  const themeSwitch = document.getElementById('themeSwitch');
  const body = document.body;

  // تحميل الوضع المحفوظ
  if(localStorage.getItem('theme') === 'dark') {
    body.classList.add('dark-theme');
    themeSwitch.checked = true;
  }

  themeSwitch.addEventListener('change', () => {
    if(themeSwitch.checked){
      body.classList.add('dark-theme');
      localStorage.setItem('theme','dark');
    } else {
      body.classList.remove('dark-theme');
      localStorage.setItem('theme','light');
    }
  });

  // التحكم بالنافذة المنبثقة
  const aboutModal = document.getElementById('aboutModal');
  const aboutBtn = document.getElementById('aboutBtn');
  const closeModal = document.getElementById('closeModal');
  const closeModalBtn = document.getElementById('closeModalBtn');

  function openModal() {
    aboutModal.classList.add('active');
  }

  function closeModalFunc() {
    aboutModal.classList.remove('active');
  }

  aboutBtn.addEventListener('click', e => { e.preventDefault(); openModal(); });
  closeModal.addEventListener('click', closeModalFunc);
  closeModalBtn.addEventListener('click', closeModalFunc);
  aboutModal.addEventListener('click', e => { if(e.target === aboutModal) closeModalFunc(); });
});
