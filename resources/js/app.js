import { Livewire } from '../../vendor/livewire/livewire/dist/livewire.esm';
import Alpine from 'alpinejs';
import mask from '@alpinejs/mask';

Alpine.plugin(mask)

Livewire.start()

import './bootstrap';

document.addEventListener('DOMContentLoaded', () => {
  // light/dark mode switcher
  const lightSwitches = document.querySelectorAll('.light-switch');
  if (lightSwitches.length > 0) {
    lightSwitches.forEach((lightSwitch, i) => {
      if (localStorage.getItem('dark-mode') === 'true') {
        lightSwitch.checked = true;
      }
      lightSwitch.addEventListener('change', () => {
        const { checked } = lightSwitch;
        lightSwitches.forEach((el, n) => {
          if (n !== i) {
            el.checked = checked;
          }
        });
        document.documentElement.classList.add('**:transition-none!');
        if (lightSwitch.checked) {
            document.documentElement.classList.add('dark');
            document.querySelector('html').style.colorScheme = 'dark';
          localStorage.setItem('dark-mode', true);
          document.dispatchEvent(new CustomEvent('darkMode', { detail: { mode: 'on' } }));
        } else {
          document.documentElement.classList.remove('dark');
          document.querySelector('html').style.colorScheme = 'light';
          localStorage.setItem('dark-mode', false);
          document.dispatchEvent(new CustomEvent('darkMode', { detail: { mode: 'off' } }));
        }
        setTimeout(() => {
          document.documentElement.classList.remove('**:transition-none!');
        }, 1);
      });
    });
  }

});
