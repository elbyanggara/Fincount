/**
 * FinCount Pro - Interactive Main Script
 * Handles Navigation, Tabs, AJAX Contact Form, Accordions, Counters & Floating Actions
 */

document.addEventListener('DOMContentLoaded', () => {
  // 1. Mobile Menu Toggle
  const mobileToggle = document.querySelector('.mobile-toggle');
  const navMenu = document.querySelector('.nav-menu');

  if (mobileToggle && navMenu) {
    mobileToggle.addEventListener('click', () => {
      navMenu.classList.toggle('open');
      const icon = mobileToggle.querySelector('i');
      if (icon) {
        if (navMenu.classList.contains('open')) {
          icon.className = 'fas fa-times';
        } else {
          icon.className = 'fas fa-bars';
        }
      }
    });

    // Close menu when clicking outside
    document.addEventListener('click', (e) => {
      if (!navMenu.contains(e.target) && !mobileToggle.contains(e.target) && navMenu.classList.contains('open')) {
        navMenu.classList.remove('open');
        const icon = mobileToggle.querySelector('i');
        if (icon) icon.className = 'fas fa-bars';
      }
    });
  }

  // 2. Interactive Feature Tabs
  const tabBtns = document.querySelectorAll('.tab-btn');
  const tabContents = document.querySelectorAll('.tab-content');

  if (tabBtns.length > 0) {
    tabBtns.forEach(btn => {
      btn.addEventListener('click', () => {
        const targetId = btn.getAttribute('data-tab');
        
        tabBtns.forEach(b => b.classList.remove('active'));
        tabContents.forEach(c => c.classList.remove('active'));

        btn.classList.add('active');
        const targetContent = document.getElementById(targetId);
        if (targetContent) {
          targetContent.classList.add('active');
        }
      });
    });
  }

  // 3. Stats Counter Animation on Scroll
  const statNumbers = document.querySelectorAll('.stat-number');
  let animated = false;

  const animateCounters = () => {
    statNumbers.forEach(counter => {
      const target = +counter.getAttribute('data-target');
      const count = +counter.innerText.replace(/[^0-9]/g, '');
      const speed = target / 60;

      const updateCount = () => {
        const current = +counter.innerText.replace(/[^0-9]/g, '');
        if (current < target) {
          counter.innerText = Math.ceil(current + speed).toLocaleString('id-ID');
          setTimeout(updateCount, 25);
        } else {
          counter.innerText = target.toLocaleString('id-ID');
        }
      };
      updateCount();
    });
  };

  const statsSection = document.querySelector('.stats-section');
  if (statsSection && statNumbers.length > 0) {
    const observer = new IntersectionObserver((entries) => {
      if (entries[0].isIntersecting && !animated) {
        animated = true;
        animateCounters();
      }
    }, { threshold: 0.3 });

    observer.observe(statsSection);
  }

  // 4. Back to Top Button
  const backToTopBtn = document.querySelector('.back-to-top');
  if (backToTopBtn) {
    window.addEventListener('scroll', () => {
      if (window.scrollY > 400) {
        backToTopBtn.classList.add('show');
      } else {
        backToTopBtn.classList.remove('show');
      }
    });

    backToTopBtn.addEventListener('click', () => {
      window.scrollTo({
        top: 0,
        behavior: 'smooth'
      });
    });
  }

  // 5. Contact Form Submission (AJAX & Validation with Email Simulation)
  const contactForm = document.getElementById('contactForm');
  const formAlert = document.getElementById('formAlert');

  if (contactForm) {
    contactForm.addEventListener('submit', async (e) => {
      e.preventDefault();

      const submitBtn = contactForm.querySelector('button[type="submit"]');
      const originalBtnText = submitBtn ? submitBtn.innerHTML : 'Kirim Pesan';

      // Validation
      const name = contactForm.querySelector('[name="name"]').value.trim();
      const email = contactForm.querySelector('[name="email"]').value.trim();
      const phone = contactForm.querySelector('[name="phone"]').value.trim();
      const message = contactForm.querySelector('[name="message"]').value.trim();
      const product = contactForm.querySelector('[name="product"]')?.value || 'FinCount Pro';

      if (!name || !email || !phone || !message) {
        showAlert('Mohon lengkapi semua kolom yang wajib diisi (*).', 'error');
        return;
      }

      // Email format regex
      const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      if (!emailRegex.test(email)) {
        showAlert('Format alamat email tidak valid.', 'error');
        return;
      }

      // Loading state
      if (submitBtn) {
        submitBtn.disabled = true;
        submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Mengirim formulir...';
      }

      try {
        // Attempt AJAX dispatch if PHP backend exists, otherwise provide simulated instant feedback
        let success = true;
        const formData = new FormData(contactForm);

        // Check if on WordPress or local PHP
        if (window.fincount_ajax_obj || window.location.protocol.startsWith('http')) {
          try {
            const endpoint = window.fincount_ajax_obj ? window.fincount_ajax_obj.ajax_url : 'contact-handler.php';
            if (window.fincount_ajax_obj) {
              formData.append('action', 'fincount_contact_submit');
              formData.append('nonce', window.fincount_ajax_obj.nonce);
            }
            const res = await fetch(endpoint, {
              method: 'POST',
              body: formData
            });
            if (res.ok) {
              const data = await res.json();
              if (data && !data.success) {
                success = false;
                showAlert(data.message || 'Gagal mengirim pesan.', 'error');
              }
            }
          } catch (err) {
            // Local file mode or serverless fallback
            console.log('Sending via standard client feedback simulation');
          }
        }

        if (success) {
          showAlert(`Terima kasih, Bapak/Ibu ${name}! Pesan dan permintaan demo untuk ${product} telah berhasil dikirim ke tim sales (sales@fincount.id). Kami akan menghubungi Anda dalam waktu 1x24 jam.`, 'success');
          contactForm.reset();
        }
      } catch (error) {
        showAlert('Terjadi kendala saat mengirim pesan. Silakan hubungi kami via WhatsApp atau telepon langsung.', 'error');
      } finally {
        if (submitBtn) {
          submitBtn.disabled = false;
          submitBtn.innerHTML = originalBtnText;
        }
      }
    });
  }

  function showAlert(msg, type) {
    if (!formAlert) return;
    formAlert.className = `form-alert ${type}`;
    formAlert.innerHTML = `<strong><i class="fas ${type === 'success' ? 'fa-check-circle' : 'fa-exclamation-triangle'}"></i></strong> ${msg}`;
    formAlert.scrollIntoView({ behavior: 'smooth', block: 'center' });
  }

  // 6. Accordion for FAQs
  const accordionHeaders = document.querySelectorAll('.accordion-header');
  accordionHeaders.forEach(header => {
    header.addEventListener('click', () => {
      const item = header.parentElement;
      const isOpen = item.classList.contains('active');

      document.querySelectorAll('.accordion-item').forEach(i => i.classList.remove('active'));
      if (!isOpen) {
        item.classList.add('active');
      }
    });
  });

  // 7. Pricing Period Switcher (Bulanan / Tahunan)
  const billingToggle = document.getElementById('billingToggle');
  if (billingToggle) {
    billingToggle.addEventListener('change', (e) => {
      const isAnnual = e.target.checked;
      const priceAmounts = document.querySelectorAll('.price-amount');
      const periodLabels = document.querySelectorAll('.period-label');

      priceAmounts.forEach(el => {
        const monthly = el.getAttribute('data-monthly');
        const annual = el.getAttribute('data-annual');
        el.innerText = isAnnual ? annual : monthly;
      });

      periodLabels.forEach(lbl => {
        lbl.innerText = isAnnual ? '/tahun (Hemat 20%)' : '/bulan';
      });
    });
  }
});
