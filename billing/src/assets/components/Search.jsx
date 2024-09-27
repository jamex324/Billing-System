import React from 'react';

function Search({ setSearchTerm }) {
  const handleChange = (event) => {
    setSearchTerm(event.target.value);
  };

  return (
    <div className="mb-4">
      <input 
        type="text" 
        className="form-control" 
        placeholder="Search by first or last name..." 
        onChange={handleChange} 
      />
    </div>
  );
}

export default Search;
