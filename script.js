const fontSizeRange = document.getElementById('font-size-range');
const fontSizeValue = document.getElementById('font-size-value');
const textToChange = document.getElementById('text-to-change');

fontSizeRange.addEventListener('input', function () {
    const fontSize = this.value + 'px';
    textToChange.style.fontSize = fontSize;
    fontSizeValue.textContent = fontSize;
});
