<?php
<div class="widgets-section">
					<div className="footerOurServices">
      <div className="services">
     
            <ul>
              <p>
                <Link href= key={item.id}>
                  <strong>{item.title}</strong>
                </Link>
              </p>
              {item.services.map((service) => (
                <li key={service.id}>{service}</li>
              ))}
            </ul>
          
        
      </div>
    </div>