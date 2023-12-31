import {
  TableContainer,
  Paper,
  Table,
  TableRow,
  TableCell,
  TableHead,
  TableBody,
  Typography,
} from '@mui/material';
import { Fragment, useEffect, useState } from 'react';

type Props = {
  id: string;
  type: string;
};

type Historique_Type = {
  date: string;
  description: string;
  utilisateur: string;
};

const Historique = ({ id, type }: Props) => {
  const [historiques, setHistoriques] = useState<Historique_Type[]>([]);

  useEffect(() => {
    fetch(window.name + `api/historique/${type}/${id}`)
      .then((response) => response.json())
      .then((data) => {
        setHistoriques(data);
      });
  }, [id, type]);

  return (
    <Fragment>
      <div className="md:mr-20">
        <div className="w-full">
          <div className="mb-8">
            <Typography variant="h4" className="mx-auto">
              Historique
            </Typography>
          </div>
          <div className="w-full overflow-scroll max-h-screen overflow-y-scroll">
            <TableContainer component={Paper}>
              <Table aria-label="simple table">
                <TableHead>
                  <TableRow>
                    <TableCell>Date</TableCell>
                    <TableCell>Description</TableCell>
                    <TableCell align="right">Utilisateur</TableCell>
                  </TableRow>
                </TableHead>
                <TableBody>
                  {historiques &&
                    historiques.map((row, index) => (
                      <TableRow
                        key={index}
                        sx={{
                          '&:last-child td, &:last-child th': {
                            border: 0,
                          },
                        }}
                      >
                        <TableCell component="th" scope="row">
                          {row.date}
                        </TableCell>
                        <TableCell component="th" scope="row">
                          {row.description}
                        </TableCell>
                        <TableCell component="th" scope="row">
                          {row.utilisateur}
                        </TableCell>
                      </TableRow>
                    ))}
                </TableBody>
              </Table>
            </TableContainer>
          </div>
        </div>
      </div>
    </Fragment>
  );
};

export default Historique;
