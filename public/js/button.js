let timerInterval
const { value: email } = await
const { value: formValues } = await

function satu() {
Swal.fire({
  title: 'Redirecting!',
  html: 'You will be redirected in <b></b> milliseconds.',
  timer: 1000,
  timerProgressBar: true,
  didOpen: () => {
    Swal.showLoading()
    const b = Swal.getHtmlContainer().querySelector('b')
    timerInterval = setInterval(() => {
      b.textContent = Swal.getTimerLeft()
    }, 100)
  },
  willClose: () => {
    clearInterval(timerInterval)
    window.location.href = '/profile';
  }
}).then((result) => {
  if (result.dismiss === Swal.DismissReason.timer) {
    console.log('I was closed by the timer')
  }
})
}

function dua() {
Swal.fire({
  title: 'Redirecting!',
  html: 'You will be redirected in <b></b> milliseconds.',
  timer: 1000,
  timerProgressBar: true,
  didOpen: () => {
    Swal.showLoading()
    const b = Swal.getHtmlContainer().querySelector('b')
    timerInterval = setInterval(() => {
      b.textContent = Swal.getTimerLeft()
    }, 100)
  },
  willClose: () => {
    clearInterval(timerInterval)
    window.location.href = '/portofolio';
  }
}).then((result) => {
  if (result.dismiss === Swal.DismissReason.timer) {
    console.log('I was closed by the timer')
  }
})
}

function tiga() {
Swal.fire({
  title: 'Redirecting!',
  html: 'You will be redirected in <b></b> milliseconds.',
  timer: 1000,
  timerProgressBar: true,
  didOpen: () => {
    Swal.showLoading()
    const b = Swal.getHtmlContainer().querySelector('b')
    timerInterval = setInterval(() => {
      b.textContent = Swal.getTimerLeft()
    }, 100)
  },
  willClose: () => {
    clearInterval(timerInterval)
    window.location.href = '/hubungi_saya';
  }
}).then((result) => {
  if (result.dismiss === Swal.DismissReason.timer) {
    console.log('I was closed by the timer')
  }
})
}

function empat() {
Swal.fire({
  title: 'Redirecting!',
  html: 'You will be redirected in <b></b> milliseconds.',
  timer: 1000,
  timerProgressBar: true,
  didOpen: () => {
    Swal.showLoading()
    const b = Swal.getHtmlContainer().querySelector('b')
    timerInterval = setInterval(() => {
      b.textContent = Swal.getTimerLeft()
    }, 100)
  },
  willClose: () => {
    clearInterval(timerInterval)
    window.location.href = '/hubungi_saya';
  }
}).then((result) => {
  if (result.dismiss === Swal.DismissReason.timer) {
    console.log('I was closed by the timer')
  }
})
}

function gagal() {
Swal.fire({
  icon: 'error',
  title: 'Oops...',
  text: 'Saat ini belum tersedia!',
  footer: '<a href="/">Kembali ke awal?</a>'
})
}

function load() {
  const Toast = Swal.mixin({
  toast: true,
  position: 'top-end',
  showConfirmButton: false,
  timer: 3000,
  timerProgressBar: true,
  didOpen: (toast) => {
    toast.addEventListener('mouseenter', Swal.stopTimer)
    toast.addEventListener('mouseleave', Swal.resumeTimer)
  }
})

Toast.fire({
  icon: 'success',
  title: 'Halaman berhasil dimuat.'
})
}

function funfact(){
  Swal.fire({
  title: 'Tombol ditengah halaman ini lebih responsif daripada tombol navigasi.',
  showDenyButton: true,
  confirmButtonText: 'True',
  denyButtonText: `False`,
}).then((result) => {
  if (result.isConfirmed) {
    Swal.fire({
  icon: 'success',
  title: 'Congrats!',
  text: 'Jawaban anda benar',
})
  } else if (result.isDenied) {
    Swal.fire({
  icon: 'error',
  title: 'Oops...',
  text: 'Silahkan mencoba!',
})
  }
})
}

function tamat() {
  Swal.fire({
    icon: 'success',
    title: 'Selamat!',
    text: 'Anda telah mengunjungi seluruh portofolio saya.',
    confirmButtonText: 'Kembali'
  }).then((result) => {
    if (result.isConfirmed) {
      Swal.fire({
        title: 'Redirecting!',
        html: 'You will be redirected in <b></b> milliseconds.',
        timer: 1000,
        timerProgressBar: true,
        didOpen: () => {
          Swal.showLoading()
          const b = Swal.getHtmlContainer().querySelector('b')
          timerInterval = setInterval(() => {
            b.textContent = Swal.getTimerLeft()
          }, 100)
        },
        willClose: () => {
          clearInterval(timerInterval)
          window.location.href = '/';
        }
      }).then((result) => {
        if (result.dismiss === Swal.DismissReason.timer) {
          console.log('I was closed by the timer')
        }
      })
    }
  })
}

function kirim() {
Swal.fire({
  title: 'Form Kirim Pesan',
  html:
    '<input id="swal-input1" class="swal2-input" placeholder="Masukkan email valid" type="email">' +
    '<input id="swal-input2" class="swal2-input" style="height: 50px;" placeholder="Masukkan pesan"><br>',
  focusConfirm: false,
  preConfirm: () => {
    const email = document.getElementById('swal-input1').value
    const message = document.getElementById('swal-input2').value
    
    if (!email || !message) {
      Swal.showValidationMessage('Tolong isi kedua kolom.')
    } else if (!isValidEmail(email)) {
      Swal.showValidationMessage('Tolong masukkan email yang valid')
    } else {
      return { email, message }
    }
  }
}).then(result => {
  if (result.value) {
    const { email, message } = result.value
    Swal.fire(`Pesan dengan : <br>Email: ${email}<br>Message: ${message}<br><br>Berhasil dikirim`)
  }
})

function isValidEmail(email) {
  return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)
}

}

function instagram(){
  Swal.fire({
    title: 'Are you sure?',
    text: "Anda akan membuka halaman baru!",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Visit instagram'
  }).then((result) => {
    if (result.isConfirmed) {
      window.open("https://www.instagram.com/hutrisemendawai_/", "_blank");
    }
  });}

function twitter(){
  Swal.fire({
    title: 'Are you sure?',
    text: "Anda akan membuka halaman baru!",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Visit twitter'
  }).then((result) => {
    if (result.isConfirmed) {
      window.open("https://twitter.com/urmealismissing", "_blank");
    }
  });
}

function linkedin(){
  Swal.fire({
    title: 'Are you sure?',
    text: "Anda akan membuka halaman baru!",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Visit linkedin'
  }).then((result) => {
    if (result.isConfirmed) {
      window.open("https://linkedin.com/in/ahmad-hutri-semendawai-562a43231", "_blank");
    }
  });
}
