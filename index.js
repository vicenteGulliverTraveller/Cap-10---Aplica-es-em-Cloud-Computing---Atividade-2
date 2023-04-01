const select = document.querySelector('select');

document.addEventListener('DOMContentLoaded', function() {
  const xhr = new XMLHttpRequest();
  xhr.open('GET', 'http://www.geonames.org/childrenJSON?geonameId=3469034');
  xhr.onload = function() {
    if (xhr.status === 200) {
      const data = JSON.parse(xhr.responseText);
      const states = data.geonames.filter(item => item.adminCode1 !== '').map(item => item.adminName1);

      states.forEach(state => {
        const option = document.createElement('option');
        option.text = state;
        option.value = state;
        select.add(option);
      });
    } else {
      console.log('Erro ao obter os estados');
    }
  };
  xhr.send();
});
