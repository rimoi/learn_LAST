import { Controller } from '@hotwired/stimulus';
import JSConfetti from 'js-confetti';

export default class extends Controller {
    poof() {
        const jsConfetti = new JSConfetti();

        jsConfetti.addConfetti({
            emojis: ['🌈', '⚡️', '💥', '✨', '💫', '🌸'],
        })
        jsConfetti.addConfetti({
            confettiColors: [
                '#ff0a54', '#ff477e', '#ff7096', '#ff85a1', '#fbb1bd', '#f9bec7',
            ],
        })
    }
}
