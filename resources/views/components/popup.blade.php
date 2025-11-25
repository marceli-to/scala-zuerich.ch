<div class="fixed inset-0 z-[500] bg-black/80 flex items-center justify-center hidden p-20" data-pop-up>
  <figure class="bg-white _p-35 max-w-4xl relative border-8 border-white" data-pop-up-content>
    <a href="" class="absolute right-5 top-5 md:right-10 md:top-10 z-40" data-pop-up-close>
       <x-icons.cross class="w-14 md:w-18 h-auto text-black" />
    </a>
    <a href="https://www.firstcaution.ch/de/" target="_blank" title="Firstcaution">
      <img src="/media/img/firstcaution.png" width="2243" height="1344" class="w-full h-auto" />
    </a>
  </figure>
</div>
<script>
(function() {
  const STORAGE_KEY = 'popup_shown';
  const popup = document.querySelector('[data-pop-up]');
  const closeBtn = document.querySelector('[data-pop-up-close]');

  if (!popup || localStorage.getItem(STORAGE_KEY)) return;

  // Show popup
  popup.classList.remove('hidden');
  localStorage.setItem(STORAGE_KEY, 'true');

  // Close on backdrop click
  popup.addEventListener('click', function(e) {
    if (e.target === popup) {
      popup.classList.add('hidden');
    }
  });

  // Close on close button click
  if (closeBtn) {
    closeBtn.addEventListener('click', function(e) {
      e.preventDefault();
      popup.classList.add('hidden');
    });
  }
})();
</script>