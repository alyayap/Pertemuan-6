document.getElementById('ruteForm').addEventListener('submit', function(e) {
    const asal = document.getElementById('asal').value;
    const tujuan = document.getElementById('tujuan').value;
    if (asal === tujuan) {
      e.preventDefault();
      alert('Bandara asal dan tujuan tidak boleh sama!');
    }
  });
  