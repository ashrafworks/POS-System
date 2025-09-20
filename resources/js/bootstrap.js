import * as bootstrap from 'bootstrap';
import * as Popper from '@popperjs/core';

try {
    window.Popper = Popper;
} catch (e) {
    console.log(e);
}
