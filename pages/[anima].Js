import React from 'react';
import { useRouter } from 'next/router'
const AnimalPage = () => {
 const router = useRouter()
 const pathData = router.query
 return (
 <h1 style={{ color: "blueviolet", textAlign: "center" }}>
 animal name: {pathData.animal}<br/>
 type: {pathData.type}
 </h1>
 )
}
export default AnimalPage