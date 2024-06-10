document.addEventListener('DOMContentLoaded', function() {
  const tableBody = document.getElementById('table-body');

  
  function addRow(inquiryData) {
    const newRow = `
      <tr>
        <td>${inquiryData.column1}</td>
        <td>${inquiryData.column2}</td>
        <td>${inquiryData.column3}</td>
      </tr>
    `;
    tableBody.insertAdjacentHTML('beforeend', newRow);
  }

  function receiveInquiry() {
    
    const newInquiryData = {
      column1: 'New Data 1',
      column2: 'New Data 2',
      column3: 'New Data 3',
      column4: 'New Data 4',
      column5: 'New Data 5',
      column6: 'New Data 6'
    };

    
    addRow(newInquiryData);
  }

  document.addEventListener('DOMContentLoaded', function() {
    const tableBody = document.getElementById('table-body');
  
    // Function to add new row with inquiry data
    function addRow(inquiryData) {
      const newRow = `
        <tr>
          <td>${inquiryData.column1}</td>
          <td>${inquiryData.column2}</td>
          <td>${inquiryData.column3}</td>
          <!-- Add more data cells as needed -->
          <td><a href="mailto:${inquiryData.email}">Reply</a></td> <!-- Reply link -->
        </tr>
      `;
      tableBody.insertAdjacentHTML('beforeend', newRow);
    }
  
   
    function receiveInquiry() {
      
      const newInquiryData = {

        email: 'customer@example.com' 
      };
  
      
      addRow(newInquiryData);
    }
  
  });
  

