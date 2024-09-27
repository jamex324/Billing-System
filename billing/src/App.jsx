import React from 'react';
import { BrowserRouter, Routes, Route } from 'react-router-dom';
import Home from './Home.jsx'; // Ensure the path is correct
import Dashboard from './Dashboard.jsx';
import BSBA from './BSBA.jsx';
import BSIT from './BSIT.jsx';
import BEED from './BEED.jsx';
import BSED from './BSED.jsx';
import BSBAFM from './BSBAFM.jsx';
import FM from './FM.jsx';
import Studentinfo from './Studentinfo.jsx';
import Cashier from './Cashier.jsx';
import SOA from './SOA.jsx';
import SOAComponents from './SOAComponents.jsx';
import COR from './COR.jsx';

function App() {
  return (
    <BrowserRouter>
      <Routes>
        <Route index element={<Home />} />
        <Route path="/login" element={<Home />} />
        <Route path="/dashboard" element={<Dashboard />} />
        <Route path="bsbamm" element={<BSBA />} />
        <Route path="bsbafm" element={<BSBAFM />} />
        <Route path="/bsit" element={<BSIT />} />
        <Route path="/beed" element={<BEED />} />
        <Route path="/bsed" element={<BSED />} />
        <Route path="/fm" element={<FM />} />
        <Route path="/studentinfo" element={<Studentinfo />} />
        <Route path="/cashier" element={<Cashier />} />
        <Route path="/soa" element={<SOA />} />
        <Route path="/student/:id" element={<SOAComponents />} />
        <Route path="/cor/:id" element={<COR />} />
      </Routes>
    </BrowserRouter>
  );
}

export default App;