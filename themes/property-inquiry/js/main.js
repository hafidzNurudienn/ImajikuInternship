const textInput = document.getElementById('textInput');
const charCountDisplay = document.getElementById('charCount');
const maxChars = 200;

textInput.addEventListener('input', function() {
    const text = textInput.value;
    const charCount = text.length;
    charCountDisplay.textContent = charCount > maxChars ? maxChars : charCount; 
    if (charCount > maxChars) {
        textInput.value = text.substring(0, maxChars); 
    }
});