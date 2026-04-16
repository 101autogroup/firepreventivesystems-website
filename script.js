// Fire Preventive Systems - script.js

function toggleFaq(btn) {
  const item = btn.closest('.faq-item');
  const answer = item.querySelector('.faq-answer');
  const icon = btn.querySelector('.faq-icon');
  const isOpen = item.classList.contains('active');
  document.querySelectorAll('.faq-item').forEach(el => {
    el.classList.remove('active');
    el.querySelector('.faq-question').setAttribute('aria-expanded','false');
    el.querySelector('.faq-answer').style.display = 'none';
    const ic = el.querySelector('.faq-icon');
    ic.classList.replace('fa-chevron-up','fa-chevron-down');
  });
  if (!isOpen) {
    item.classList.add('active');
    btn.setAttribute('aria-expanded','true');
    answer.style.display = 'block';
    icon.classList.replace('fa-chevron-down','fa-chevron-up');
  }
}

document.addEventListener('DOMContentLoaded', function () {
  document.querySelectorAll('a[href^="#"]').forEach(a => {
    a.addEventListener('click', function(e) {
      const target = document.querySelector(this.getAttribute('href'));
      if (!target) return;
      e.preventDefault();
      const offset = (document.querySelector('.site-header')?.offsetHeight || 70) + 16;
      window.scrollTo({ top: target.getBoundingClientRect().top + window.pageYOffset - offset, behavior: 'smooth' });
    });
  });

  const hdr = document.querySelector('.site-header');
  if (hdr) {
    window.addEventListener('scroll', () => {
      hdr.style.boxShadow = window.scrollY > 50 ? '0 4px 24px rgba(0,0,0,0.18)' : '0 2px 12px rgba(0,0,0,0.08)';
    });
  }

  const form = document.getElementById('contactForm');
  if (form) {
    form.querySelectorAll('input,select,textarea').forEach(f => {
      f.addEventListener('input', () => { f.style.borderColor = ''; });
    });
    form.addEventListener('submit', function(e) {
      let ok = true;
      form.querySelectorAll('[required]').forEach(f => {
        if (!f.value.trim()) { f.style.borderColor = '#C0392B'; ok = false; }
      });
      if (!ok) { e.preventDefault(); form.querySelector('[required]').focus(); }
    });
  }

  if ('IntersectionObserver' in window) {
    const io = new IntersectionObserver((entries) => {
      entries.forEach((entry, i) => {
        if (entry.isIntersecting) {
          setTimeout(() => { entry.target.style.opacity = '1'; entry.target.style.transform = 'translateY(0)'; }, i * 80);
          io.unobserve(entry.target);
        }
      });
    }, { threshold: 0.12 });
    document.querySelectorAll('.feature-card,.step,.faq-item').forEach(el => {
      el.style.cssText += 'opacity:0;transform:translateY(22px);transition:opacity 0.5s ease,transform 0.5s ease;';
      io.observe(el);
    });
  }
});
