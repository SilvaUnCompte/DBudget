
function new_toast(text, toast_type) {
    let toast = document.getElementsByClassName("toast")[0];    // Test if toast already exists
    if (toast != undefined) { toast.remove(); }                 // If it does, remove it

    document.body.insertAdjacentHTML("beforeEnd",`
        <div class="toast ${toast_type}">
            <p class="toast-title">${toast_type.toUpperCase()}</p>
            <span class="close">&times;</span>
            <p>${text}</p>
        </div>`);

    toast = document.getElementsByClassName("toast")[0];        // Get the new toast
    let close = document.getElementsByClassName("close")[0];    // Get the close button

    
    close.onclick = () => delete_toast(toast);
    setTimeout(() => {
        delete_toast(toast);
    }, 3500);
}

function delete_toast(toast) {
    toast.style.animation = "toast-hide 0.6s ease forwards";
    setTimeout(() => {
        toast.remove();
    }, 600);
}