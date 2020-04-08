const cardsArray = [
  { name: 'Harry', img: 'Harry.jpg', },
  { name: 'Hermione', img: 'Hermione.jpg', },
  { name: 'Ron', img: 'Ron.jpg', },
  { name: 'Voldemort', img: 'Voldemort.jpg', },
  { name: 'Dumbledore', img: 'Dumbledore.jpg', },
  { name: 'Snape', img: 'Snape.jpg', },
  { name: 'Dobby', img: 'Dobby.jpg', },
  { name: 'FandG', img: 'FandG.jpg', },
  { name: 'Black', img: 'Black.jpg', },
  { name: 'Hagrid', img: 'Hagrid.jpg', },
  { name: 'Bellatrix', img: 'Bellatrix.jpg', },
  { name: 'Malfoy', img: 'Malfoy.jpg', },
]



const game = document.getElementById('game')

// Create a section with a class of grid
const grid = document.createElement('section')
grid.setAttribute('class', 'grid')

// Append the grid section to the game div
game.appendChild(grid)

cardsArray.forEach(item => {
  // Create a div
  const card = document.createElement('div')

  // Apply a card class to that div
  card.classList.add('card')

  // Set the data-name attribute of the div to the cardsArray name
  card.dataset.name = item.name

  // Apply the background image of the div to the cardsArray image
  card.style.backgroundImage = `img(${logo.jpg})`

  // Append the div to the grid section
  grid.appendChild(card)