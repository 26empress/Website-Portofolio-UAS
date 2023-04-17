let timerInterval

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
  title: 'A group of flamingos is called a flamboyance?',
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
  text: 'Jawaban anda salah',
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

