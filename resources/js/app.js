import './bootstrap';

import Alpine from 'alpinejs';
import AlpineFloatingUI from '@awcodes/alpine-floating-ui'
import NotificationsAlpinePlugin from '../../vendor/filament/notifications/dist/module.esm'
import focus from '@alpinejs/focus';
window.Alpine = Alpine;

Alpine.plugin(AlpineFloatingUI)
Alpine.plugin(NotificationsAlpinePlugin)
Alpine.plugin(focus);

Alpine.start();
