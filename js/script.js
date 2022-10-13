const inputs = document.querySelectorAll("form > input")

inputs.forEach((input, i) => {
    input.onchange = (e) => {
      const value = input.value
      const next = e.target.nextElementSibling

      value.length !== 0
        ? next.removeAttribute('disabled')
        : next.setAttribute('disabled', '')
    }
})