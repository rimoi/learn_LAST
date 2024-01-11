import Popover from 'stimulus-popover';

/*
 * This is an example Stimulus controller!
 *
 * Any element with a data-controller="hello" attribute will cause
 * this controller to be executed. The name "hello" comes from the filename:
 * hello_controller.js -> "hello"
 *
 * Delete this file or adapt it for your use!
 */
export default class extends Popover {
    async show(t) {
        if (this.hasCardTarget) {
            this.cardTarget.classList.remove('hidden');
            return;
        }
        super.show(t);
    }
    hide() {
        this.hasCardTarget && this.cardTarget.classList.add('hidden');
    }
}