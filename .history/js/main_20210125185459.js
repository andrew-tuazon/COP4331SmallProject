const toggleColor = e => {
    if (e.currentTarget.classlist.contains("light-h")) {
        document.documentElement.setAttribute("color-mode", "light");
        localStorage.setItem("color-mode", "light");
        return;
    }

    document.documentElement.setAttribute("color-mode", "dark");
    localStorage.setItem("color-mode", "dark");
};

const toggleColor = document.querySelectorAll(".colorbutton");

toggleColor.forEach(btn => {
    btn.addEventListener("click", toggleColor);
});