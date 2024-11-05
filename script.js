// Load the data from the JSON file
let data = [];

fetch('data.json')
  .then(response => response.json())
  .then(json => data = json)
  .catch(error => console.error('Error loading data:', error));

// Search function
function searchData() {
  const query = document.getElementById('searchBox').value.toLowerCase();
  const results = data.filter(item => 
    item.plant.toLowerCase().includes(query) || 
    item.chemical.toLowerCase().includes(query)
  );

  // Display search results
  const searchResults = document.getElementById('searchResults');
  searchResults.innerHTML = results.map(result => 
    `<p>Plant: ${result.plant}, Chemical: ${result.chemical}</p>`
  ).join('');
}
