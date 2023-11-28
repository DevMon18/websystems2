const body = document.querySelector("body"),
      modeToggle = body.querySelector(".mode-toggle");
      sidebar = body.querySelector("nav");
      sidebarToggle = body.querySelector(".sidebar-toggle");

let getMode = localStorage.getItem("mode");
if(getMode && getMode ==="dark"){
    body.classList.toggle("dark");
}

let getStatus = localStorage.getItem("status");
if(getStatus && getStatus ==="close"){
    sidebar.classList.toggle("close");
}

modeToggle.addEventListener("click", () =>{
    body.classList.toggle("dark");
    if(body.classList.contains("dark")){
        localStorage.setItem("mode", "dark");
    }else{
        localStorage.setItem("mode", "light");
    }
});

sidebarToggle.addEventListener("click", () => {
    sidebar.classList.toggle("close");
    if(sidebar.classList.contains("close")){
        localStorage.setItem("status", "close");
    }else{
        localStorage.setItem("status", "open");
    }
})

function showForm(seatNumber) {
    const modal = new bootstrap.Modal(document.getElementById("seatModal"));
    modal.show();
}
function submitForm(seatNumber) {
    var fullName = document.getElementById("fullname-1").value;
    var studentID = document.getElementById("studentid-1").value;
    var email = document.getElementById("email-1").value;
    var role = document.getElementById("role-1").value;
    var feedback = document.getElementById("feedback-message").value;

    // Perform form validation
    if (!fullName || !studentID || !email || !role || !feedback) {
        alert("Please fill in all the required fields.");
        return;
    }

    // Create an object with the form data
    var formData = {
        fullName: fullName,
        studentID: studentID,
        email: email,
        role: role,
        feedback: feedback
    };

// Send the form data to the server using AJAX
// Make sure to replace the URL with your server endpoint
var xhr = new XMLHttpRequest();
xhr.open("POST", "/your-server-endpoint", true);
xhr.setRequestHeader("Content-Type", "application/json");

xhr.onreadystatechange = function() {
    if (xhr.readyState === 4 && xhr.status === 200) {
    // Update seat availability or perform any other necessary actions upon successful submission
    updateSeatAvailability(seatNumber);
    closeFormModal();
    }
};

xhr.send(JSON.stringify(formData));
}

function updateSeatAvailability(seatNumber) {
// Perform the necessary logic to update the seat availability
// For example, you can change the seat color or mark it as unavailable
// You can use JavaScript to modify the seat element based on the seatNumber parameter
var seatElement = document.getElementById("seat-" + seatNumber);
seatElement.classList.remove("available");
seatElement.classList.add("unavailable");
}

function closeFormModal() {
document.getElementById("seatModal").style.display = "none";
}