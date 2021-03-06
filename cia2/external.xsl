<?xml version = "1.0" encoding = "UTF-8"?>
<xsl:stylesheet version = "1.0"
   xmlns:xsl = "http://www.w3.org/1999/XSL/Transform">  

   <xsl:template match = "/">
      <html>
         <body bgcolor = "#3498db">
            <h1 align="center">Merchandise Order Updates</h1>
        
            <table align="center" border = "1" bgcolor = "white">
               <tr >
                  <th>Order No.</th>
                  <th>User ID</th>
                  <th>Member Name</th>
                  <th>Address</th>
                  <th>Sport</th>    
                  <th>Gear</th>
                  <th>Item</th>    
                  <th>Quantity</th>
                  <th>Active Score</th>
                  <th>Date of Order</th>
                  <th>Payment</th>    
                  <th>Category</th>              
               </tr>               
               <xsl:for-each select = "merchandise/order">
                  <tr>
                     <td><xsl:value-of select = "@id"/></td>
                     <td><xsl:value-of select = "string(userid)"/></td>
                     <td><xsl:value-of select = "string(name)"/></td>
                     <td><xsl:value-of select = "concat(city,', ',state)"/></td>
                     <td><xsl:value-of select = "string(sport)"/></td>
                     <td><xsl:value-of select = "string(gear)"/></td>
                     <td><xsl:value-of select = "string(item)"/></td>
                     <td><xsl:value-of select = "not(quantity)"/></td>
                     <td><xsl:value-of select = "ceiling(active_score)"/></td>
                     <td><xsl:value-of select = "string(orderdate)"/></td>
                     <td><xsl:value-of select = "string(payment)"/></td>                               
                     <td>
                        <xsl:choose>
                           <xsl:when test = "ceiling(active_score) div 5 = 1">
                              Platinium
                           </xsl:when>
              
                           <xsl:when test = "ceiling(active_score) div 3 = 1">
                              Silver
                           </xsl:when>
              
                           <xsl:otherwise>
                              Gold
                           </xsl:otherwise>
                        </xsl:choose>
    
                     </td>
                  </tr> 
               </xsl:for-each>
            </table>
         </body>
      </html>
   </xsl:template>

</xsl:stylesheet>