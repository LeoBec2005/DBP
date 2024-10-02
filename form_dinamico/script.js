function addField(sectionId, inputName, placeholderText) {
    const section = document.getElementById(sectionId);
    const div = document.createElement('div');
    const input = document.createElement('input');
    const removeButton = document.createElement('button');
    
    input.type = 'text';
    input.name = inputName + '[]';
    input.placeholder = placeholderText;
    removeButton.type = 'button';
    removeButton.textContent = 'Eliminar';
    removeButton.onclick = function() {
        section.removeChild(div);
    };
    
    div.appendChild(input);
    div.appendChild(removeButton);
    section.appendChild(div);
}