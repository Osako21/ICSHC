import Layout from './Layout';
import { BrowserRouter as Router, Routes, Route } from "react-router-dom";
import Actifs from './components/Actifs';
import ModifyActifs from './components/ModifyActifs';

function App() {
  return (
      <div className="App">
        <Router>
          <Layout>
            <Routes>
               <Route path="/actifs" element={ <Actifs />} />
               <Route path="/actifs/modify" element={ <ModifyActifs />} />

            </Routes>
          </Layout>
        </Router>
      </div>
  )
}

export default App
