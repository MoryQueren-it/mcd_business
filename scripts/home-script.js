// Navigation
function showSection(sectionId) {
  // Hide all sections
  document.querySelectorAll(".section").forEach((section) => {
    section.classList.remove("active")
  })

  // Remove active class from all nav items (desktop and mobile)
  document.querySelectorAll(".nav-item").forEach((item) => {
    item.classList.remove("active")
  })
  document.querySelectorAll(".mobile-nav-item").forEach((item) => {
    item.classList.remove("active")
  })

  // Show selected section
  document.getElementById(sectionId).classList.add("active")

  // Add active class to corresponding nav item (desktop)
  const desktopNavItem = document.querySelector(`.nav-item[data-section="${sectionId}"]`)
  if (desktopNavItem) {
    desktopNavItem.classList.add("active")
  }

  const mobileNavItem = document.querySelector(`.mobile-nav-item[data-section="${sectionId}"]`)
  if (mobileNavItem) {
    mobileNavItem.classList.add("active")
  }
}

// Add click event listeners to nav items (desktop)
document.querySelectorAll(".nav-item").forEach((item) => {
  item.addEventListener("click", () => {
    const section = item.getAttribute("data-section")
    showSection(section)
  })
})

document.querySelectorAll(".mobile-nav-item").forEach((item) => {
  item.addEventListener("click", () => {
    const section = item.getAttribute("data-section")
    showSection(section)
  })
})

// Deposit Form
document.getElementById("depositForm").addEventListener("submit", (e) => {
  e.preventDefault()
  const amount = document.getElementById("depositAmount").value
  const operator = document.getElementById("depositOperator").value
  const number = document.getElementById("depositNumber").value

  alert(`Dépôt de ${amount} Ar via ${operator} au numéro ${number} en cours de traitement...`)
  e.target.reset()
})

// Withdrawal Form
document.getElementById("withdrawalForm").addEventListener("submit", (e) => {
  e.preventDefault()
  const amount = document.getElementById("withdrawalAmount").value
  const operator = document.getElementById("withdrawalOperator").value
  const number = document.getElementById("withdrawalNumber").value

  alert(`Retrait de ${amount} Ar via ${operator} au numéro ${number} en cours de traitement...`)
  e.target.reset()
})

// Buy Offer
function buyOffer(packName, amount) {
  const confirmed = confirm(`Voulez-vous acheter le pack ${packName} pour ${amount} Ar ?`)
  if (confirmed) {
    alert(`Achat du pack ${packName} confirmé ! Vos gains commenceront demain.`)
  }
}

// Phone Form
document.getElementById("phoneForm").addEventListener("submit", (e) => {
  e.preventDefault()
  const newPhone = document.getElementById("newPhone").value
  alert(`Numéro de téléphone mis à jour : ${newPhone}`)
  e.target.reset()
})

// Password Form
document.getElementById("passwordForm").addEventListener("submit", (e) => {
  e.preventDefault()
  const newPassword = document.getElementById("newPassword").value
  const confirmPassword = document.getElementById("confirmPassword").value

  if (newPassword !== confirmPassword) {
    alert("Les mots de passe ne correspondent pas !")
    return
  }

  alert("Mot de passe mis à jour avec succès !")
  e.target.reset()
})

// Toggle Password Visibility
function togglePasswordVisibility(inputId) {
  const input = document.getElementById(inputId)
  const button = input.parentElement.querySelector(".toggle-password")
  const eyeOpen = button.querySelector(".eye-open")
  const eyeClosed = button.querySelector(".eye-closed")

  if (input.type === "password") {
    input.type = "text"
    eyeOpen.style.display = "none"
    eyeClosed.style.display = "block"
  } else {
    input.type = "password"
    eyeOpen.style.display = "block"
    eyeClosed.style.display = "none"
  }
}

// Preview Photo
function previewPhoto(event) {
  const file = event.target.files[0]
  if (file) {
    const reader = new FileReader()
    reader.onload = (e) => {
      document.getElementById("profilePhotoPreview").src = e.target.result
    }
    reader.readAsDataURL(file)
  }
}
