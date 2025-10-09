document.addEventListener("DOMContentLoaded", () => {
    console.log("JS is working ✅");

    const btn = document.getElementById("testBtn");
    btn.addEventListener("click", () => {
        alert("Button clicked! 🥊");
    });
    const btn2 = document.getElementById("testsBtn");
    btn2.addEventListener("click", () => {
        alert("Button clicked! 🥊");
    });
    const btn3 = document.getElementById("testBtns");
    btn3.addEventListener("click", () => {
        alert("Button clicked! 🥊");
    });
});
