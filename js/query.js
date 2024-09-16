const { Pool } = require('pg');

const config = {
	user: 'postgres',
	host: 'localhost',
	password: '3rud1c10n',
	database: 'comunidad'
}

const pool = new Pool(config);

const contarFilas = async () => {
	const res = await pool.query('SELECT * FROM habitantes');
	console.log(res.rowCount);
}

contarFilas();